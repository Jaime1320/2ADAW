import React from "react";

const Buscador = () => {
    return (
        <div classNameName="search">
            <h3 classNameName="title">Buscador</h3>
            <form>
                <input type="text" id="search_field" />
                <button id="search">Buscar</button>
            </form>
        </div>
    )
}

export default Buscador
