import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


    // // Standard Plan Form Submission
    // document.getElementById('standard-plan-form').addEventListener('submit', function (event) {
    //     event.preventDefault(); // Prevent the default form submission
    
    //     const formData = new FormData(this);
    
    //     fetch('/send-standard-plan', {
    //         method: 'POST',
    //         body: formData,
    //     })
    //     .then(response => {
    //         if (!response.ok) {
    //             throw new Error('Network response was not ok');
    //         }
    //         return response.json();
    //     })
    //     .then(data => {
    //         alert(data.message); // Alert success message
    //         this.reset(); // Reset the form after submission
    //     })
    //     .catch(error => {
    //         console.error('Error:', error);
    //         alert('There was an error sending your request. Please try again later.');
    //     });
    // });
    
    // // Professional Plan Form Submission
    // document.getElementById('professional-plan-form').addEventListener('submit', function (event) {
    //     event.preventDefault(); // Prevent the default form submission
    
    //     const formData = new FormData(this);
    
    //     fetch('/send-professional-plan', {
    //         method: 'POST',
    //         body: formData,
    //     })
    //     .then(response => {
    //         if (!response.ok) {
    //             throw new Error('Network response was not ok');
    //         }
    //         return response.json();
    //     })
    //     .then(data => {
    //         alert(data.message); // Alert success message
    //         this.reset(); // Reset the form after submission
    //     })
    //     .catch(error => {
    //         console.error('Error:', error);
    //         alert('There was an error sending your request. Please try again later.');
    //     });
    // });