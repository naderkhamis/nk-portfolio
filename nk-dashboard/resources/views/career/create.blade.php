<form action="{{ route('storeCareer') }}" method="post">
    <label for="title">Job Title</label>
    <input type="text" name="title" id="title">
    <label for="company">Company</label>
    <input type="text" name="company" id="company">
    <label for="from">From Date</label>
    <input type="date" name="from" id="from">
    <label for="to">To Date</label>
    <input type="date" name="to" id="to">
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
    <button type="submit">Save</button>
</form>
