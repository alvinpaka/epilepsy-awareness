if (!window.iti) {
    window.iti = null; // Store the intlTelInput instance globally
}

function openModal() {
    const modal = document.getElementById('storyModal');
    modal.classList.remove('hidden', 'opacity-0', 'invisible');
    modal.classList.add('opacity-100', 'visible');
    
    // Initialize intlTelInput only when modal opens and if not already initialized
    const phoneInput = document.querySelector("#phone");
    const countryCodeInput = document.querySelector("#country-code");
    
    if (phoneInput && countryCodeInput && !window.iti) {
        window.iti = window.intlTelInput(phoneInput, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            preferredCountries: ['ug', 'us', 'gb', 'ke', 'tz'],
            separateDialCode: true,
            initialCountry: "auto", 
            
            geoIpLookup: function(callback) {
                fetch('https://api.ipgeolocation.io/ipgeo?apiKey=b577e9e0103242138036fc5183da8532')
                    .then(res => res.json())
                    .then(data => data.country_code2.toLowerCase())
                    .catch(() => 'ug') // Fallback to Uganda
                    .then(countryCode => callback(countryCode));
            }
        });

        // Update hidden input with country code when it changes
        phoneInput.addEventListener('countrychange', function() {
            const countryData = window.iti.getSelectedCountryData();
            countryCodeInput.value = '+' + countryData.dialCode;
        });

        // Set initial country code
        const initialCountryData = window.iti.getSelectedCountryData();
        if (initialCountryData) {
            countryCodeInput.value = '+' + initialCountryData.dialCode;
        }
    }
}

function closeModal() {
    const modal = document.getElementById('storyModal');
    modal.classList.add('hidden', 'opacity-0', 'invisible');
    modal.classList.remove('opacity-100', 'visible');
}

document.addEventListener('DOMContentLoaded', function() {
    // Rest of your initialization code...
    async function submitStory(event) {
        event.preventDefault();
        const formData = new FormData(document.getElementById('storyForm'));

        try {
            const response = await fetch('/share-story', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                },
            });

            if (response.ok) {
                document.getElementById('storyForm').reset();
                const successMessage = document.getElementById('successMessage');
                successMessage.textContent = 'Your story has been submitted successfully!';
                successMessage.classList.remove('hidden');
                
                // Close modal after successful submission
                closeModal();
            } else {
                const errorData = await response.json();
                alert('Error: ' + errorData.message);
            }
        } catch (error) {
            console.error('Error submitting the story:', error);
            alert('An error occurred while submitting your story. Please try again.');
        }
    }

    const successMessage = document.getElementById('successMessage');
    if (successMessage) {
        setTimeout(function() {
            successMessage.style.transition = 'opacity 1s';
            successMessage.style.opacity = '0';
            setTimeout(function() {
                successMessage.remove();
            }, 1000);
        }, 2000);
    }
});