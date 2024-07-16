var route = "{{ url('autocomplete-category') }}";
$('#autocomplet_category').typeahead({
    displayText: function (item) {
        return item.name
    },
    afterSelect: function (item) {
        $('#category_id').val(item.id);
    },
    source: function (term, process) {
        return $.get('/autocomplete-category', { term, term }, function (data) {
            return process(data);
        });
    }
});
