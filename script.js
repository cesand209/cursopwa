if('serviceWorker' in navigator){
  window.addEventListener('load', ()=>{
    navigator.serviceWorker.register('sw.js')
      .then( objregistro =>{
        //console.log(objregistro)
        //objregistro.scope
      })
      .catch( error => {
        console.log(error)
      })
  })
}
//console.log(7)

  

// ************ PRACTICAS CON API FETCH *************************
// **************************************************************

/*s
fetch('index.php')
	.then(
		archivo => {
			console.log(archivo)
			return archivo.text()
		}
	)
	.then(texto=>console.log(texto))
	.catch()

*/