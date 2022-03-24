<?php

    $city = 'Волгограде';

    include('functions.php');

    $data = getPageData(preg_replace("#/$#", "", $_GET['url']));
    $layout_content = 'Страница не найдена';

    // окончательный HTML код
    if ($data) {
        $layout_content = renderTemplate(
            './templates/layouts/index.php', [
                'city' => $res['city'],
                'title' => $data['Title'],
                'description' => $data['Description'],
                'h1' => $data['H1'],
                'h2' => $data['H2'],
                'h3' => $data['H3']
            ]
        );
    }

    // вывод на экран итоговой страницы
    echo $layout_content;
?>