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
    avatar: 'https://api.uifaces.co/our-content/donated/xZ4wg2Xj.jpg',
    name: 'Martin Escobar',
    title: 'Founder of Meta',
    quote: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et est hendrerit, porta nunc vitae, gravida justo. Nunc fermentum magna lorem, euismod volutpat arcu volutpat et.'
},
{
    avatar: 'https://randomuser.me/api/portraits/women/79.jpg',
    name: 'Angela Stian',
    title: 'Product Designer',
    quote: 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout, that the point of using Lorem Ipsum.'
},
{
    avatar: 'https://randomuser.me/api/portraits/men/86.jpg',
    name: 'Karim Ahmed',
    title: 'DevOp Engineer',
    quote: 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.'
},
{
    avatar: 'https://api.uifaces.co/our-content/donated/xZ4wg2Xj.jpg',
    name: 'Martin Escobar',
    title: 'Founder of Meta',
    quote: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et est hendrerit, porta nunc vitae, gravida justo. Nunc fermentum magna lorem, euismod volutpat arcu volutpat et.'
},
{
    avatar: 'https://randomuser.me/api/portraits/women/79.jpg',
    name: 'Angela Stian',
    title: 'Product Designer',
    quote: 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout, that the point of using Lorem Ipsum.'
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