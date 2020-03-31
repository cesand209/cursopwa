//ASIGNAMOS UN NOMBRE A LA LLAVE DE CACHE
const CACHE_NAME = 'memoria_de_app'

//SETEAMOS LAS URL Y RECURSOS QUE QUEREMOS CARGAR EN CACHE
urlparacache = [
'./',
'./?utm=homescreen',
'./index.php',
'./css/estilos.css',
'./script.js',
'./sw.js'
//,'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'

];

self.addEventListener('install', e =>{
  console.log('Evento: SW Instalado')
  e.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        console.log('Archivos en cache')
        return cache.addAll(urlparacache)
        .then( () => self.skipWaiting() )
        //skipWaiting forza al SW a activarse
      })
      .catch(err => console.log('Falló registro de cache', err) )
  )
})

self.addEventListener('activate', e =>{

  console.log('Evento: SW Activado')
  const cacheWhitelist = [CACHE_NAME]

  e.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          //Eliminamos lo que ya no se necesita en cache
          if ( cacheWhitelist.indexOf(cacheName) === -1 )
            return caches.delete(cacheName)
        })
      )
    })
    .then(() => {
      console.log('Cache actualizado')
      // Le indica al SW activar el cache actual
      return self.clients.claim()
    })
  )

})

self.addEventListener('fetch', e => {
  console.log('Evento: SW Recuperando')

  e.respondWith(
    //Miramos si la petición coincide con algún elemento del cache
    caches.match(e.request)
      .then(res => {
        console.log('Recuperando cache')
        if ( res ) {
          //Si coincide lo retornamos del cache
          return res
        }
        //Sino, lo solicitamos a la red
        return fetch(e.request)
      })
    )
})