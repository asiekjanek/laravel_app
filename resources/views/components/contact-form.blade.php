<form action="{{ route('contact.send') }}" method="POST">

    @csrf

    <h3>Formularz kontaktowy</h3>

    <input type="text" name="name" placeholder="Imię">

    <br><br>

    <input type="email" name="email" placeholder="E-mail">

    <br><br>

    <textarea name="message" placeholder="Wiadomość"></textarea>

    <br><br>

    <button type="submit">
        Wyślij
    </button>

</form>