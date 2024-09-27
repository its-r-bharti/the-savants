<section class="py-14">
    <div class="max-w-screen-xl mx-auto px-4 md:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <h3 class="text-indigo-600 font-semibold pb-6">What people are saying</h3>
            <div id="testimonial-container">
                <!-- Testimonials will be inserted here by JavaScript -->
            </div>
        </div>
        <div class="mt-6">
            <ul class="flex gap-x-3 justify-center" id="testimonial-buttons">
                <!-- Buttons will be inserted here by JavaScript -->
            </ul>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
const testimonials = [
{
    avatar: 'https://randomuser.me/api/portraits/men/32.jpg',
    name: 'John Doe',
    title: 'Principal at Greenwood High School',
    quote: 'The Savants School Management System has completely transformed how we manage our school operations. From attendance tracking to seamless communication with parents, everything is organized and efficient. We’ve saved so much time and effort, and our staff is more productive than ever!'
},
{
    avatar: 'https://randomuser.me/api/portraits/women/68.jpg',
    name: 'Emily Roberts',
    title: 'Administrator at Oakwood Academy',
    quote: 'We’ve tried various management tools, but The Savants truly stands out. The user interface is intuitive, and the customer support is excellent. Our teachers love the real-time gradebook updates, and parents appreciate the easy access to student progress. Highly recommended!'
},
{
    avatar: 'https://randomuser.me/api/portraits/men/44.jpg',
    name: 'Michael Thompson',
    title: 'Head of IT at Riverdale School',
    quote: 'The Savants has given us complete control over our school’s data. The customizable reports and automated fee management have made administrative tasks a breeze. It’s by far the best solution we’ve implemented for our school!'
},
{
    avatar: 'https://randomuser.me/api/portraits/women/55.jpg',
    name: 'Sarah Lee',
    title: 'Teacher at Maplewood Elementary',
    quote: 'As a teacher, I love how easy it is to update grades and communicate with parents through The Savants platform. The interface is clean and user-friendly, and it has made managing my classes so much simpler.'
},
{
    avatar: 'https://randomuser.me/api/portraits/men/78.jpg',
    name: 'David Harris',
    title: 'Parent at Horizon High School',
    quote: 'The Savants system has made it so easy for me to stay updated on my child’s progress. I can check attendance, grades, and even communicate with teachers directly. It’s an amazing tool for parents who want to stay involved in their child’s education.'
}
];


let currentTestimonial = 0;
const testimonialContainer = document.getElementById('testimonial-container');
const testimonialButtons = document.getElementById('testimonial-buttons');

function renderTestimonial(index) {
const testimonial = testimonials[index];
testimonialContainer.innerHTML = `
    <figure>
        <blockquote>
            <p class="text-gray-800 text-xl font-semibold sm:text-2xl">${testimonial.quote}</p>
        </blockquote>
        <div class="mt-6">
            <img src="${testimonial.avatar}" class="w-16 h-16 mx-auto rounded-full" />
            <div class="mt-3">
                <span class="block text-gray-800 font-semibold">${testimonial.name}</span>
                <span class="block text-gray-600 text-sm mt-0.5">${testimonial.title}</span>
            </div>
        </div>
    </figure>
`;
}

function renderButtons() {
testimonialButtons.innerHTML = testimonials.map((_, index) => `
    <li>
        <button 
            class="w-2.5 h-2.5 rounded-full duration-150 ring-offset-2 ring-indigo-600 focus:ring ${currentTestimonial === index ? 'bg-indigo-600' : 'bg-gray-300'}"
            onclick="changeTestimonial(${index})"
        ></button>
    </li>
`).join('');
}

window.changeTestimonial = function (index) {
currentTestimonial = index;
renderTestimonial(currentTestimonial);
renderButtons();
};

renderTestimonial(currentTestimonial);
renderButtons();
});
</script>