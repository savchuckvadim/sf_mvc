<?php

class Model_Portfolio extends Model
{
	
	public function get_data()
	{	
		
		// Здесь мы просто сэмулируем реальные данные.
		
		return array(
			
			array(
				'Year' => '2021',
				'Site' => '<a href="https://github.com/savchuckvadim/sociopat">Sociopath-Client </a>',
				'Description' => 'Проект SPA написанный на React.js, Redux. Социальная сеть Sociopath. SPA общается по REST API с серверной частью.'
			),

			array(
				'Year' => '2021',
				'Site' => '<a href="https://github.com/savchuckvadim/sociopath_backend">Sociopath-Server</a>',
				'Description' => 'Серверная часть социальной сети Sociopath. Написан на PHP с помощью фрэймворка Laravel. В проекте реализованы такие технологии, как websockets, authentication SPA, CORS-безопасность.'
			),

			array(
				'Year' => '2022',
				'Site' => '<a href="https://github.com/savchuckvadim/chat_client">Chat-Client</a>',
				'Description' => 'Проект SPA написанный на React.js, Redux. Приложение - Чат. SPA общается по REST API с серверной частью. Можно посмотреть пользователей он-лайн и получать оповещения по websockets.'
			),

			array(
				'Year' => '2022',
				'Site' => '<a href="https://github.com/savchuckvadim/chat_server">Chat-Server</a>',
				'Description' => 'Серверная часть социальной сети Sociopath. Написан на PHP с помощью фрэймворка Laravel. В проекте реализованы такие технологии, как websockets, подтверждение по e-mail, CORS-безопасность.'
			),
			array(
				'Year' => '2023',
				'Site' => '<a href="https://github.com/savchuckvadim/modul_38_client">AD Tech Client</a>',
				'Description' => 'Tрекер трафика, созданный для организации взаимодействия компаний (рекламодателей), которые хотят привлечь к себе на сайт посетителей и покупателей (клиентов), и владельцев сайтов (веб-мастеров), на которые люди приходят, например, чтобы почитать новости или пообщаться на форуме.'
			),

			array(
				'Year' => '2023',
				'Site' => '<a href="https://github.com/savchuckvadim/chat_server">AD Tech Server</a>',
				'Description' => 'Серверная часть трекера. Система умеет:

				Получать информацию о ссылке, по которой кликнул клиент в момент перехода с сайта веб-мастера;
				Зафиксировать в логах факт перехода;
				Проверить, что веб-мастер подписан на offer, к которому привязана ссылка:
				Если веб-мастер не подписан на offer, то скидывать на 404;
				Преобразовать клик-ссылку в целевой URL;
				Перенаправить клиента на целевой URL;
				Зафиксировать факт перенаправления.'
			),

			
		);
	}

}
