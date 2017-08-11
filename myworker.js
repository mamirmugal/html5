
self.addEventListener("message", function(e){

    console.log(e.data);
    self.postMessage({name:"Amir"});

}, false);

self.close();