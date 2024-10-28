<h1>Aggiungi un nuovo Fumetto</h1>
<form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <label for="title">Titolo:</label>
    <input type="text" name="title" id="title" required>

    <label for="description">Descrizione:</label>
    <textarea name="description" id="description" required></textarea>

    <label for="price">Prezzo:</label>
    <input type="number" name="price" id="price" required>

    <label for="series">Serie:</label>
    <input type="text" name="series" id="series" required>

    <label for="sale_date">Data di vendita:</label>
    <input type="date" name="sale_date" id="sale_date" required>

    <label for="type">Tipo:</label>
    <input type="text" name="type" id="type" required>

    <button type="submit">Salva</button>
</form>
<a href="{{ route('comics.index') }}">Annulla</a>
