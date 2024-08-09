<form action="{{ route('payment.process') }}" method="POST">
   @csrf
   <!-- Autres champs du formulaire -->
   <button type="submit">Payer</button>
</form>
