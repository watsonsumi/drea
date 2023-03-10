<x-app-layout>
<style>
.letra{
    font: 150% "Constantia", serif;
    color: #7b1523;
    font-size: 650%;
    
    
    position: absolute;
    top: 135px; /* ajustar los valores para mover la imagen */
    left: 490px;
    border-radius: 30%;
    margin: 5%;
    border:2px solid #fff;
    display: block;

} 
.colorBoton{
    background-color: #7b1523;
    color: #e5e5e5;

}</style>
    <x-slot name="header">
    
    </x-slot>
    <img src="img/drea-apurimac.png" width="500" height="500">
    <p class="letra">
        Dirección Regional de Educación Apurímac
    </p>
</x-app-layout>
