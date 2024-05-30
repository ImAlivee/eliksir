document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('submitReviewForm');
    const reviewsList = document.getElementById('reviews-list');
    const stars = document.querySelectorAll('.star-rating .fa');

    // Soumettre un nouvel avis
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const user_id = document.getElementById('user_id').value;
        const rating = document.getElementById('rating').value;
        const comment = document.getElementById('comment').value;

        const response = await fetch('app/view/submit_review.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({ user_id, rating, comment })
        });

        const result = await response.text();
        alert(result);
        loadReviews();
    });

    // Charger les avis
    const loadReviews = async () => {
        try {
            const response = await fetch('app/view/fetch_reviews.php');
            const reviews = await response.json();
            console.log('Avis récupérés :', reviews);

            if (reviews.length > 0) {
                reviewsList.innerHTML = reviews.map(review => `
                    <div class="review">
                        <strong>${review.username}</strong> - <span class="rating">${'★'.repeat(review.rating)}</span>
                        <p>${review.comment}</p>
                        <small>${review.created_at}</small>
                    </div>
                `).join('');
            } else {
                reviewsList.innerHTML = '<p>Aucun avis pour le moment.</p>';
            }
        } catch (error) {
            console.error('Erreur lors du chargement des avis :', error);
        }
    };

    loadReviews();

    // Gérer les interactions avec les étoiles
    stars.forEach(star => {
        star.addEventListener('click', () => {
            const rating = star.getAttribute('data-rating');
            document.getElementById('rating').value = rating;
            stars.forEach(s => s.classList.remove('fa-star'));
            stars.forEach(s => s.classList.add('fa-star-o'));
            for (let i = 0; i < rating; i++) {
                stars[stars.length - 1 - i].classList.remove('fa-star-o');
                stars[stars.length - 1 - i].classList.add('fa-star');
            }
        });
    });
});
