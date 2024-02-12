const apiUrl = 'https://fakestoreapi.com/products?limit=7';


const traer_api = async () => {
    return await fetch(apiUrl)
        .then(response => response.json())
        .then(data => data)
        .catch(error => console.log('error', error));
};


export default traer_api;
