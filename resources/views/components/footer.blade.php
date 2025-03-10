<footer class="bg-white py-6 footer_fit text-center justify-center">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <div>
                <h4 class="font-bold mb-2"><a href="/" class="text-black">Главная</a></h4>
            </div>
            <div>
                <h4 class="font-bold mb-2"><a href="{{ route('see') }}" class="text-black">Чтобы выбрать</a></h4>
            </div>
            <div>
                <h4 class="font-bold mb-2">Личный кабинет</h4>
                <ul>
                    <li><a href="{{ route('home') }}" class="text-gray-600">Избранное</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>