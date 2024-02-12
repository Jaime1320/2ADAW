import React from 'react';
const Article = ({ articulo }) => {
    return (
        <article>
            <div className="datos">
                <span>Precio: {articulo.price}</span>
                <span>Categoría: {articulo.category}</span>
            </div>
            <h4>
                <a href="/">{articulo.title}</a>
            </h4>
            <p>{articulo.description}</p>
        </article>
    );
};


export default Article;


