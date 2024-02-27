const app = new (function (){
    this.guardar = () => {
       var form = new FormData();
       form.append("cantidad de producto", document.getElementsByName("cantidad").value);
       form.append("tipo producto", document.getElementsByName("producto").value);
       form.append("v_usuario", document.getElementsByName("v_usuario").value);
       form.append("id_carga", document.getElementsByName("id_carga").value);
       form.append("voltaje", document.getElementsByName("voltaje").value);
       form.append("v_tipo_tuberia", document.getElementsByName("v_tipo_tuberia").value);
       form.append("v_conductor", document.getElementsByName("v_conductor").value);
       form.append("v_longitud", document.getElementsByName("v_longitud").value);
       fetch("../controllers/guardar.php",{
       method: "POST",
       body:form,
       })
       .then((res)=>res.json())
       .then((data)=> {
        console.log(data);
       })
       .catch((error)=> console.log(error));
    };
}

)();