<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descubre Popayán en línea - Tu guía virtual de la ciudad con información sobre hoteles, eventos y entretenimiento en Popayán, Colombia.">
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <title>Hoteles PopayApp</title>
    <link rel="preload" href="https://kit.fontawesome.com/17b8f1dd19.js" as="script">
    <script src="https://kit.fontawesome.com/17b8f1dd19.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="{{ asset('Img/Iconos/popayApp.png') }}" alt="Logo de PopayApp">
                <h3>Descubre Popayán en línea ¡Tu guía virtual de la ciudad!</h3>
            </div>
            <div class="iconos">
                <a href="#" class="nav1"><i class="fa-solid fa-house"></i><p>Inicio</p></a>
                <a href="#" class="nav1"><i class="fa-solid fa-sack-dollar"></i><p>Divisas</p></a>
                <a href="#" class="nav1"><i class="fa-solid fa-calendar"></i><p>Eventos</p></a>
                <a href="#" class="nav1"><i class="fa-sharp-duotone fa-solid fa-cross"></i><p>S.S</p></a>
                <a href="#" class="nav1"><i class="fa-solid fa-film"></i><p>Film</p></a>
                <a href="#" class="nav1"><i class="fa-duotone fa-solid fa-hotel"></i><p>Hoteles</p></a>
                <a href="#" class="nav1"><i class="fa-duotone fa-solid fa-magnifying-glass"></i><p>Buscar</p></a>
                <a href="#" class="nav1"><i class="fa-solid fa-user"></i><p>Usuario</p></a>
            </div>
        </nav>
    </header>

    <main>
        <section id="hoteles">
            <h2>Hoteles en Popayán</h2>
            <div class="hotel-menu">
                <button onclick="showHotel('hotel1')">Hotel Dann Monasterio</button>
                <button onclick="showHotel('hotel2')">Hotel San Martin</button>
                <button onclick="showHotel('hotel3')">Hotel La Plazuela</button>
                <button onclick="showHotel('hotel4')">Hotel Camino Real</button>
                <button onclick="showHotel('hotel5')">Hotel La Herradura</button>
            </div>
            <section id="hotel1" class="hotel active" tabindex="0">
                <img src="{{ asset('Img/Hotel Monasterio/fachada-hotel-dann-monasterio.jpg') }}" alt="Fachada del Hotel Dann Monasterio">
                <img src="Img/Hotel Monasterio/fachada-hotel-dann-monasterio.jpg" alt="Fachada del Hotel Dann Monasterio">
                <h3>Hotel Dann Monasterio</h3>
                <p>Es un establecimiento de lujo ubicado en un antiguo monasterio del siglo XVII, restaurado para combinar la elegancia colonial con comodidades modernas. Ideal para quienes buscan una experiencia de hospedaje sofisticada en el corazón del centro histórico de Popayán.</p>
                <ul>
                    <li><strong>Servicios:</strong> Spa, gimnasio, restaurante, Wi-Fi gratuito, estacionamiento</li>
                    <li><strong>Tarifas:</strong> Desde $150 por noche</li>
                    <li><strong>Opiniones:</strong> 4.8/5 basado en 250 reseñas</li>
                </ul>
                <div class="galeria">
                    <h4>Galería:</h4>
                    <img src="Img/Hotel Monasterio/Piscina.jpg" alt="Piscina del Hotel Dann Monasterio">
                    <img src="Img/Hotel Monasterio/patio-central-hotel-dann.jpg" alt="Patio Central del Hotel Dann Monasterio">
                </div>
            </section>
            <section id="hotel2" class="hotel" tabindex="0">
                <img src="{{ asset('Img/Hotel San Martin/fachada.jpg') }}" alt="Fachada del Hotel San Martin">
                <h3>Hotel San Martin</h3>
                <p>Se caracteriza por ofrecer un ambiente cómodo y acogedor con servicios de alta calidad. Su ubicación céntrica facilita el acceso a los principales puntos de interés de la ciudad.</p>
                <ul>
                    <li><strong>Servicios:</strong> Restaurante, bar, gimnasio, Wi-Fi gratuito</li>
                    <li><strong>Tarifas:</strong> Desde $80 por noche</li>
                    <li><strong>Opiniones:</strong> 4.5/5 basado en 180 reseñas</li>
                </ul>
                <div class="galeria">
                    <h4>Galería:</h4>
                    <img src="Img/Hotel San Martin/hotel-san-martin Piscina.jpg" alt="Piscina del Hotel San Martin">
                    <img src="Img/Hotel San Martin/hotel-san-martin salon de eventos.jpg" alt="Salón del Hotel San Martin">
                </div>
            </section>
            <section id="hotel3" class="hotel" tabindex="0">
                <img src="{{ asset('Img/Hotel La Plazuela/357515136_755270516604213_2403182232835058738_n.jpg') }}" alt="Fachada del Hotel La Plazuela">
                <h3>Hotel La Plazuela</h3>
                <p>Ofrece un ambiente acogedor y cómodo, con una ubicación estratégica en el centro de la ciudad. Ideal para quienes buscan proximidad a los principales atractivos turísticos.</p>
                <ul>
                    <li><strong>Servicios:</strong> Desayuno incluido, Wi-Fi gratuito, servicio de lavandería</li>
                    <li><strong>Tarifas:</strong> Desde $60 por noche</li>
                    <li><strong>Opiniones:</strong> 4.3/5 basado en 150 reseñas</li>
                </ul>
                <div class="galeria">
                    <h4>Galería:</h4>
                    <img src="Img/Hotel La Plazuela/31531312.jpg" alt="Interior del Hotel La Plazuela">
                    <img src="Img/Hotel La Plazuela/122527070.jpg" alt="Restaurante del Hotel La Plazuela">
                </div>
            </section>
            <section id="hotel4" class="hotel" tabindex="0">
                <img src="Img/Hotel Camino Real/hotel-camino-real.jpg" alt="Hotel Camino Real">
                <h3>Hotel Camino Real</h3>
                <p>Se destaca por su elegancia y confort. Ubicado en una zona tranquila, ofrece servicios de alta calidad y una experiencia de hospedaje única.</p>
                <ul>
                    <li><strong>Servicios:</strong> Spa, piscina, restaurante, Wi-Fi gratuito, estacionamiento</li>
                    <li><strong>Tarifas:</strong> Desde $120 por noche</li>
                    <li><strong>Opiniones:</strong> 4.7/5 basado en 200 reseñas</li>
                </ul>
                <div class="galeria">
                    <h4>Galería:</h4>
                    <img src="Img/Hotel Camino Real/hotel-camino-real desde el aire.jpg" alt="Vista desde el aire del Hotel Camino Real">
                    <img src="Img/Hotel Camino Real/hotel-camino-real restaurante.jpg" alt="Restaurante del Hotel Camino Real">
                </div>
            </section>
            <section id="hotel5" class="hotel" tabindex="0">
                <img src="Img/Hotel La Herradura/52173198.jpg" alt="Fachada del Hotel La Herradura">
                <h3>Hotel La Herradura</h3>
                <p>Ofrece un ambiente familiar y acogedor, ideal para turistas y viajeros de negocios. Su ubicación permite un fácil acceso a diversas atracciones locales.</p>
                <ul>
                    <li><strong>Servicios:</strong> Restaurante, bar, Wi-Fi gratuito</li>
                    <li><strong>Tarifas:</strong> Desde $70 por noche</li>
                    <li><strong>Opiniones:</strong> 4.4/5 basado en 160 reseñas</li>
                </ul>
                <div class="galeria">
                    <h4>Galería:</h4>
                    <img src="Img/Hotel La Herradura/imagen2.jpg" alt="Interior del Hotel La Herradura">
                    <img src="Img/Hotel La Herradura/imagen3.jpg" alt="Restaurante del Hotel La Herradura">
                </div>
            </section>
        </section>
    </main>

    <footer>
        <div class="sociales">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <div class="derechos">
            <p>© 2024 Hoteles PopayApp - Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>
