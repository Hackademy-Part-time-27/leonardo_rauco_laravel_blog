<x-layout>
    <div class="row">
    <div class="col-lg-6 mx-auto">
<h1>Contatti</h1>

<p class="lead text_muted">Contattaci per ricevere info sul nostro blog</p>
<x-success />
<x-error />
<form action="{{ route('contacts.send')}}" method="POST">
    @csrf
 <div class="row g-3">
<div class="col-12">
    <label for="email">email</label>
    <input type="email"name="email" id="email" class="form-control">

</div>

<div class="col-12">
    <label for="message">messaggio</label>
    <textarea name="message" id="message"  rows="5" class="form-control"></textarea>

</div>
<div>
<button type="sumbit" class="btn btn-primary">invia</button>
</div>
</div>   
</form>
</x-layout>
   
