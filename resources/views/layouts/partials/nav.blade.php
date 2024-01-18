<section class="navigation">
    <ul>
        <li>
            <a href="/">
                <span id="icon">
                    <i class="bi bi-brightness-high brightness1"></i>
                </span>
                <span class="title">Ma journée</span>
            </a>
        </li>
        <li>
            <a href="{{ route('important') }}">
                <span id="icon">
                    <i class="bi bi-star star1"></i>
                </span>
                <span class="title">Important</span>
            </a>
        </li>
        <li>
            <a href="{{ route('planifier') }}">
                <span id="icon">
                    <i class="bi bi-calendar calendar1"></i>
                </span>
                <span class="title">Planifié</span>
            </a>
        </li>
        <li>
            <a href="{{ route('all') }}">
                <span id="icon">
                    <i class="bi bi-house-door house1"></i>
                </span>
                <span class="title">Tâches</span>
            </a>
        </li>
    </ul>
</section>