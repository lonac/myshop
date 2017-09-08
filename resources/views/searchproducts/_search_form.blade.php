<form action="{{ url('search') }}" method="GET" role="form">
    <div class="input-group input-group-lg">
        <input autofocus class="typeahead form-control" autocomplete="off" name="q"
               placeholder="product name, company,"
               type="text" value="{{ isset($_GET['q']) ? $_GET['q'] : '' }}">
        <span class="input-group-btn">
			<button class="btn btn-default btn-lg" type="submit">Search</button>
		</span>
    </div>
</form>