<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.css" integrity="sha512-QmxybGIvkSI8+CGxkt5JAcGOKIzHDqBMs/hdemwisj4EeGLMXxCm9h8YgoCwIvndnuN1NdZxT4pdsesLXSaKaA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Paginate Js</title>
    <style type="text/css">
        ul,
        li {
            list-style: none;
        }

        #wrapper {
            width: 900px;
            margin: 20px auto;
        }

        .data-container {
            margin-top: 20px;
        }

        .data-container ul {
            padding: 0;
            margin: 0;
        }

        .data-container li {
            margin-bottom: 5px;
            padding: 5px 10px;
            background: #eee;
            color: #666;
        }

        .data-container2 {
            margin-top: 20px;
        }

        .data-container2 ul {
            padding: 0;
            margin: 0;
        }

        .data-container2 li {
            margin-bottom: 5px;
            padding: 5px 10px;
            background: #eee;
            color: #666;
        }
    </style>
</head>

<body>
    <div id="wrapper" style="margin-top: 100px;">
        <section>
            <div class="data-container"></div>
            <div id="pagination-demo1"></div>
            <div class="data-container2"></div>
            <div id="pagination-demo2"></div>
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.min.js" integrity="sha512-1zzZ0ynR2KXnFskJ1C2s+7TIEewmkB2y+5o/+ahF7mwNj9n3PnzARpqalvtjSbUETwx6yuxP5AJXZCpnjEJkQw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function() {
            (function(name) {
                var container = $('#pagination-' + name);
                var sources = function() {
                    var result = [];

                    for (var i = 1; i < 196; i++) {
                        result.push(i);
                    }

                    return result;
                }();

                var options = {
                    dataSource: sources,
                    pageSize: 20,
                    callback: function(response, pagination) {
                        window.console && console.log(response, pagination);

                        var dataHtml = '<ul>';

                        $.each(response, function(index, item) {
                            dataHtml += '<li>' + item + '</li>';
                        });

                        dataHtml += '</ul>';

                        container.prev().html(dataHtml);
                    }
                };

                //$.pagination(container, options);

                container.addHook('beforeInit', function() {
                    window.console && console.log('beforeInit...');
                });
                container.pagination(options);

                container.addHook('beforePageOnClick', function() {
                    window.console && console.log('beforePageOnClick...');
                    //return false
                });
            })('demo1');
        });

        $(function() {

            $.ajax({
                url: 'https://api.flickr.com/services/feeds/photos_public.gne?tags=cat&tagmode=any&format=json&jsoncallback=?', //url tujuan 
                type: 'GET', // metode request post
                dataType: 'json', // format data yang dikembalikan dari server
                beforeSend: function() {
                    $('.data-container2').html('Loading data from flickr.com ...');
                },
                success: function(response) {
                    // console.log(response.items);
                    var sumberdaya = response.items;

                    $('#pagination-demo2').pagination({
                        dataSource: sumberdaya,
                        totalNumber: 120,
                        pageSize: 10,
                        callback: function(response, pagination) {
                            var dataHtml = '<ul>';

                            $.each(response, function(index, item) {
                                dataHtml += '<li>' + `<a href='${item.link}' target='_blank'>` + item.title +
                                    '</a>' + '</li>';
                            });

                            dataHtml += '</ul>';

                            $('.data-container2').html(dataHtml);
                            console.log(dataHtml)
                        }
                    })
                }
            });
        })
    </script>
</body>

</html>