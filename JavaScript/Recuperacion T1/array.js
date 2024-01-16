let miarray = [[1,2,3],[3,4,5]];
let copia = [...miarray];
console.log(copia);

for (let i = 0; i < copia.length; i++) {
        console.log('0'+copia[i].join(' 0'));
}