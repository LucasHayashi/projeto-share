@component('mail::message')
# Novo projeto na Share

O projeto {{$nm_projeto}} acabou de realizar o cadastro na Share. 

@component('mail::button', ['url' => $url])
Ver projeto
@endcomponent

Enviado por,<br>
Sistem Share
@endcomponent
