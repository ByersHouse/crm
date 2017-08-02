<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings['LBL_MAP'] = 'Карта';
$mod_strings['LBL_MAPS'] = 'Карты';
$mod_strings['LBL_MODULE_NAME'] = 'Карты';
$mod_strings['LBL_MODULE_TITLE'] = 'Карты: Главная';
$mod_strings['LBL_MODULE_ID'] = 'Карты';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Карты';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Пользовательская метка';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Участок карты';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Мои карты';

$mod_strings['LBL_FLEX_RELATE'] = 'Показать на карте адрес (центр)';
$mod_strings['LBL_MODULE_TYPE'] = 'Отображать на карте объекты:';
$mod_strings['LBL_DISTANCE'] = 'Отображать объекты, находящиеся в радиусе:';
$mod_strings['LBL_UNIT_TYPE'] = 'Единицы измерения расстояния:';

$mod_strings['LBL_MAP_DISPLAY'] = 'Отобразить карту';
$mod_strings['LBL_MAP_LEGEND'] = 'Условные обозначения:';
$mod_strings['LBL_MAP_USERS'] = 'Пользователи:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Другие обозначения:';
$mod_strings['LBL_MAP_GROUP'] = 'Группа';
$mod_strings['LBL_MAP_TYPE'] = 'Тип';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Ответственный(ая):';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Проложить маршрут';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Карты Google';

$mod_strings['LNK_NEW_MAP'] = 'Добавить новую карту';
$mod_strings['LNK_NEW_RECORD'] = 'Добавить новую карту';
$mod_strings['LNK_MAP_LIST'] = 'Карты';
$mod_strings['LNK_IMPORT_MAPS'] = 'Импорт карт';
$mod_strings['LBL_MAP_GEOCODE_ADDRESSES'] = 'Геокодировать адреса';
$mod_strings['LBL_MAP_DONATE'] = 'Помочь проекту';
$mod_strings['LBL_MAP_DONATE_TO_THIS_PROJECT'] = 'Помочь проекту';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Тест геокодирования';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Отобразить объекты';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = '--не указано--';
$mod_strings['LBL_MAP_ADDRESS'] = 'Адрес';
$mod_strings['LBL_MAP_PROCESS'] = 'Запустить';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Статус геокодирования';
$mod_strings['LBL_MAP_GEOCODED_COUNTS'] = 'Результаты геокодирования';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Результаты геокодирования';
$mod_strings['LBL_CRON_URL'] = 'Cron URL:';
$mod_strings['LBL_MODULE_HEADING'] = 'Модуль';
$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Всего';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Сбросить';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'В приведённой таблице показано количество геокодированных записей по модулям, сгруппированных в зависимости от полученных результатов. Помните, что Карты Google накладывают ограничение на определение количества координат, равное 2500 запросам в сутки для одного ip-адреса. Данный модуль кэширует результаты геокодирования для уменьшения количества необходимых запросов.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Для автоматического регулярного геокодирования рекомендуется прописать соответствующее задание для CRON и выполнять его ежедневно во время наименьшей загрузки сервера. Указанный URL предназначен для использования в соответствующем задании планировщика. За более подобной информацией обратитесь к документации системы.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Экспорт адресов';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'При необходимости геокодирования адресов сторонними утилитами, вы можете воспользоваться следующими ссылками для экспорта адресов из соответствующих модулей. По окончании геокодирования импортируйте обновлённые адреса через модуль Кэш адресов. Помните, что модуль Кэш адресов используется как необязательное дополнение к основному функционалу карт. Вся информация, полученная в результате геокодирования, хранится в соответствующем модуле.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Кэш адресов';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Добавить в список адресатов';
$mod_strings['LBL_ADD_TO_TARGET_LIST_CONFIRM'] = 'Вы действительно хотите добавить выбранные записи в список адресатов?';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'Добавление...';


$mod_strings['LBL_CONFIG_TITLE'] = 'Параметры конфигурации';
$mod_strings['LBL_CONFIG_SAVED'] = 'Настройки успешно сохранены!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Расчётный адрес';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Отгрузочный адрес';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Основной адрес';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Другой адрес';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Гибкие отношения';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Адрес (Простой, Пользователи)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Custom (Custom Controller Logic)';
$mod_strings['LBL_ENABLED'] = 'Вкл.';
$mod_strings['LBL_DISABLED'] = 'Выкл.';
$mod_strings['LBL_DEFAULT'] = 'По умолчанию:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'По умолчанию:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Обрабатываемые при геокодировании модули:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Обрабатываемые при геокодировании таблицы:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Тип адреса: Указание типа адреса, который будет обрабатываться в процессе геокодирования. Возможные значения: расчётный, отгрузочный, основной, другой, связанный.";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Тип адреса для ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Тип адреса для Контрагентов:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Тип адреса для Контактов:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Тип адреса для Предварит. контактов:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Тип адреса для Сделок:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(соответствующего Контрагента)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Тип адреса для Обращений:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Тип адреса для Проектов:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(соответствующего Контрагента/Сделки)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Тип адреса для Встреч:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Тип адреса для Адресатов:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Обрабатывается адрес из модуля, связанного с данным мероприятием';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Настройка названия группы меток: Указание названия для меток, относящихся к определённому модулю. Например: ответственный(ая), отрасль, статус, стадия продаж, приоритет";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Название группы меток для ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Название группы меток для Контрагентов:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Название группы меток для Контактов:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Название группы меток для Предварит. контактов:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Название группы меток для Сделок:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Название группы меток для Обращений:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Название группы меток для Проектов:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Название группы меток для Встреч:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Название группы меток для Адресатов:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Параметры геокодирования:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'URL API-сервиса геокодирования:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'Адрес Google Maps API V3 либо адрес прокси-сервера.';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Секретная фраза:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'Секретная фраза прокси-сервера.';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_GET_A_KEY'] = 'Получить бесплатный ключ Google Maps Geocoding API (для бесплатного геокодирования большого числа адресов в день).';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Лимит геокодирования:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "Установка лимита на количество записей, получаемых запросом для геокодирования.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Лимит геокодирования для Google:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "Установка лимита на количество записей при использовании Google Maps API при геокодировании.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Лимит экспортируемых адресов:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "Установка лимита на количество экспортируемых адресов.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "Использовать приблизительные координаты";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "Разрешать использовать приблизительные координаты местоположения в результатах геокодирования.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Параметры кэша адресов:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Использование кэша адресов при чтении:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "Разрешить модулю кэша адресов получать данные из соответствующей таблицы.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Использование кэша адресов при записи:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "Разрешить модулю кэша адресов записывать данные в соответствующую таблицу.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Параметры хуков (Logic Hooks):';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Использование хуков: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "Разрешить хукам обновление записей. Рекомендуется отключить данный параметр при обновлении системы.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Параметры меток:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Лимит меток:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "Установка лимита на количество одновременно отображаемых на карте меток.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Автоматически устанавливаемая широта:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "Автоматическое позиционирование центральной части карты на указанную широту при создании нового объекта (метки, участка карты и т.д.).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Автоматически устанавливаемая долгота:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "Автоматическое позиционирование центральной части карты на указанную долготу при создании нового объекта (метки, участка карты и т.д.).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Единицы измерения расстояния:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "Установка единиц измерения расстояния. Возможные варианты: километры или мили.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Расстояние по умолчанию (радиус окружности):";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "При просмотре карты отображать выбранные объекты, расположенные от центра карты на указанном расстоянии.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Разница в отображении координат дублированных меток:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "Установка смещения широты и долготы для меток с одинаковыми координатами.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Размер ячейки сетки при кластеризации меток:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "Установка размера ячейки сетки (в пикселях). Метки, расположенные в границах одной ячейки, считаются единым кластером меток.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Максимальный масштаб для кластеризации:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "Установка максимального масштаба карты, при котором метки будут отображаться единым кластером.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Примечание: все сохранённые параметры находятся в таблице <b>config</b>, категория <b>jjwg</b>. Файл controller.php для перезаписи параметров больше не используется.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Участки карт';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'Метки';
$mod_strings['LBL_PARENT_ID'] = 'ID родителя';
$mod_strings['LBL_JJWP_PARTNERS'] = 'Партнёры JJWP';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Получить ключ API';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Ключ Google Maps API';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Ключ не обнаружен. Перейдите в панель Администрирования и укажите ключ API в настройках параметров карт Google.';