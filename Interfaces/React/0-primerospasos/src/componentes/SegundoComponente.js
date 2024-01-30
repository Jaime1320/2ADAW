import React, { useState } from 'react'

export const SegundoComponente=()=>{
    // let nombre ="Fernando Jesus Fernandez Trujillo";
    //     const cambiarNombre =(e)=>{
    //         nombre="Fernandez Trujillo, Fernando Jesus"
    //     }
    const[nombre,setNombre]=useState(" Jaime Hermana Caffarena");
    const cambiarNombre = (e,nombreFijo)=>{
        setNombre(nombreFijo);
    }
    return(
        <div>
            <h3>Componente: useState</h3>
            <p>Nombre:{nombre}</p>
            <button onClick={e=>cambiarNombre(e," Hermana Caffarena, Jaime")}>Cambiar Nombre</button>
            &nbsp;&nbsp;
            <input type="text" onChange={e=>cambiarNombre(e,e.target.value)} placeholder='Introduce Nombre'></input>
        </div>
    )
}