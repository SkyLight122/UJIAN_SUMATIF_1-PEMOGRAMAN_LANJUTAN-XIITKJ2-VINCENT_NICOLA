@props(['color'])

<style>
    .buttons{
        width: 125px;
        height: 40px;
        margin-top: 10px;
        color: #ffffff;
        border: 1px solid #3b82f6;
        border-radius: 5px;
        transition: all 0.1s ease-in-out;
        transform: scale(1);
        margin: 10px 10px 10px 10px;  
    }
    .buttons:hover{
        filter: brightness(0.8);
        transform: scale(1.05);
        cursor: pointer;
    }
</style>

<button class="buttons" style="background-color: {{ $color }}">
    {{ $slot }}
</button>