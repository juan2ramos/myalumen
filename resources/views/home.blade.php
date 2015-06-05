@extends('layout.default')

@section('content')
    <div class="content-nav">
        <ul class="social">
            <li><a href="https://www.facebook.com/mikeyangoraoficial" target="_blank" class="icon-facebook2"></a></li>
            <li><a href="https://instagram.com/mikeyangora" class="icon-instagram" target="_blank"></a></li>
            <li><a href="https://twitter.com/mikeyangora" class="icon-twitter" target="_blank"></a></li>
            <li><a href="https://www.youtube.com/user/mikeyangora" class="icon-youtube3" target="_blank"></a></li>
        </ul>
        <nav>
            <ul>
                <li><a href="#home" class="scrollto">home</a></li>
                <li><a href="#gallery" class="scrollto">galeria</a></li>
                <li><a href="#eventos" class="scrollto">eventos</a></li>
                <li><a href="#biografia" class="scrollto">biografia</a></li>
                <li><a href="#contactos" class="scrollto">contacto</a></li>
            </ul>
        </nav>
    </div>
    <header id="home">
        <div class="iframe_parent">
            <iframe id="player" frameborder="0" allowfullscreen="1" title="YouTube video player"
                    src="https://www.youtube.com/embed/zlfesKyRDxo?autoplay=1&amp;controls=0&amp;autohide=0&amp;wmode=opaque&amp;showinfo=0&amp;HD=1&amp;rel=0&amp;version=3&amp;loop=1&amp;playlist=W06_4WfGnZQ&amp;modestbranding=1&amp;enablejsapi=1&amp;origin=http%3A%2F%2Frockinrio.com"></iframe>
        </div>
        <div class="hands"></div>
    </header>
    <div class="wrapper">
        <section class="gallery" id="gallery" ></section>

        <section class="events" id="eventos">
            <h2>EVENTOS</h2>
            <table>

                <tbody>
                <tr>
                    <td>Bogotá</td>
                    <td>Hotel Marriot</td>
                    <td>5 de Junio</td>
                </tr>
                <tr>
                    <td>Bogotá</td>
                    <td>Prom Vermont</td>
                    <td>7 de Junio</td>
                </tr>
                <tr>
                    <td>Bogotá</td>
                    <td>Casa Campestre El Olmo</td>
                    <td>7 de Junio</td>
                </tr>
                <tr>
                    <td>Villavicencio</td>
                    <td>Villavicencio</td>
                    <td>20 de Junio</td>
                </tr>
                <tr>
                    <td>Bogotá</td>
                    <td>San Remo La Calera.</td>
                    <td>27 de Junio</td>
                </tr>
                </tbody>
            </table>
        </section>
        <section class="social">

        </section>
        <section class="bio" id="biografia">
            <img src="{{url('img/mya.jpg')}}" alt=""/>
        </section>

        <section class="contact" id="contactos">
            <h2>CONTACTO</h2>

            <form action="">
                <div class="column-2">
                    <input type="text" placeholder="Nombre"/>
                    <input type="text" placeholder="Email"/>
                    <input type="text" placeholder="Teléfono"/>
                </div>
                <div class="column-2">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </section>
    </div>
@endsection