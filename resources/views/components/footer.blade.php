<footer class="bg-dark text-white text-center py-3 mt-auto">
    <div class="container">
        <p>&copy; {{ date('Y') }} Il Mio Sito Web. Tutti i diritti riservati.</p>
        <p>
            <a href="{{ route('privacy') }}" class="text-white text-decoration-none">Privacy Policy</a> | 
            <a href="{{ route('terms') }}" class="text-white text-decoration-none">Termini e Condizioni</a>
        </p>
    </div>
</footer>
