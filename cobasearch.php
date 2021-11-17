<link rel="stylesheet" type="text/css" href="search.css">
<body>
    <input type="text" class="boxSearch" placeholder="Search..." />
    <ul class="listSearch">
        <li>Web Master</li>
        <li>Web Design</li>
        <li>Web Programming</li>
        <li>Graphic Design</li>
        <li>Digital Marketing</li>
        <li>Flash Animation</li>
    </ul>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function($){

        $('.listSearch li').each(function(){
            $(this).attr('searchData', $(this).text().toLowerCase());
        });
        $('.boxSearch').on('keyup', function(){
        var dataList = $(this).val().toLowerCase();
            $('.listSearch li').each(function(){
                if ($(this).filter('[searchData *= ' + dataList + ']').length > 0 || dataList.length < 1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

    });
</script>