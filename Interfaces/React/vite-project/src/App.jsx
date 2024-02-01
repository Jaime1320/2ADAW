import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import  Buscador  from './componentes/Buscador';

function App() {
  const [count, setCount] = useState(0)

  return (
    <div className="layout">
        {/*Cabecera*/}
        <header className="header">
            <div className="logo">
                <div className="play"></div>
            </div>
            
            <h1>MisPelis</h1>
        </header>

        {/*Barra de navegación*/}
        <nav className="nav">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Peliculas</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>

        {/*Contenido principal*/}
        <section id="content" className="content">

            {/*aqui van las peliculas*/}
            <article className="peli-item">
                <h3 className="title">Contenido 1</h3>
                <p className="description">Descripción 1</p>

                <button className="edit">Editar</button>
                <button className="delete">Borrar</button>
            </article>

            <article className="peli-item">
                <h3 className="title">Contenido 2</h3>
                <p className="description">Descripción 2</p>

                <button className="edit">Editar</button>
                <button className="delete">Borrar</button>
            </article>

            <article className="peli-item">
                <h3 className="title">Contenido 3</h3>
                <p className="description">Descripción 3</p>

                <button className="edit">Editar</button>
                <button className="delete">Borrar</button>
            </article>

            <article className="peli-item">
                <h3 className="title">Contenido 4</h3>
                <p className="description">Descripción 4</p>

                <button className="edit">Editar</button>
                <button className="delete">Borrar</button>
            </article>

        </section>

        {/*Barra lateral*/}
        <aside className="lateral">
            <Buscador></Buscador>

            <div className="add">
                <h3 className="title">Añadir pelicula</h3>
                <form>
                    <input type="text" id="title" placeholder="Titulo" />
                    <textarea id="description" placeholder="Descripción"></textarea>
                    <input type="submit" id="save" value="Guardar" />
                </form>
            </div>
        </aside>

        {/*Pie de página*/}
        <footer className="footer">
            &copy; José Miguel Cabezuelo - Proyecto en REACT
        </footer> 
    </div>
  )
}

export default App
