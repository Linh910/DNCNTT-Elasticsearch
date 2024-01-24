<?php

    use Elasticsearch\ClientBuilder;

    require "vendor/autoload.php"

    //Elasticsearch\Client
    //Elasticsearch\ClientBuilder

    $hosts = [
        [
            'host' => '127.0.0.1'
            'port' => '9200',
            'scheme' => 'http'
        ]
        ];

    $client = ClientBuilder::cretae()->setHosts($hosts)->build();

    $exists = $client->indices()->exists(['index' => 'article']);

    if(!$exists){
        throw new Exception("Index - article khon ton tai ")


    }

    $search = $_POST['search'] ?? '';
    
    if($search != ''){
        
        $params = [
            'index' => 'article',
            'type' => 'article_type',
            'body' => [
                'query' => [
                    'match' => [
                        'testkey' => 'testvalue'
                    ]
                ]
            ]
        ];
        
        $results = $client->search($params);

    }

?>

    <div class="card m-4">
        <div class = "card-header text-danger display-4"> Search</div>
        <div class = "card-body">
            <form action = "#" method = "post">
                <div class = "form-group">
                    <label>Search description</label>
                    <input class="form-control" type="text" name="search">

                </div>
                <div class = "form-group">
                    <input class="btn btn-danger" type="submit" name="search">

                </div>
            </form>
        </div>
    </div>