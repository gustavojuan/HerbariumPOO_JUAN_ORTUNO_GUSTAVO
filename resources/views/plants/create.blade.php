<form action="{{route('plants.store')}}" method="POST">

    {{csrf_field()}}
    <label for="name">Name*:</label>
    <input type="text" id="name" name="name" required>.

    <br>

    <label for="discovery_date">Discover Date (YYYY-mm-dd)*:</label>
    <input type="text" id="discovery_date" name="discovery_date" required>


    <input type="submit" value="Enviar">
</form>
