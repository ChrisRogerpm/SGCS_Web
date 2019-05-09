@component('mail::message')
# Tarea Asignada

La siguiente tarea <b>{{$tarea}}</b> se le ha sido asignada

@component('mail::button', ['url' => route('login')])
Ir a
@endcomponent

Gracias,<br>
Sistema Gestion de la Configuración de Software
@endcomponent
