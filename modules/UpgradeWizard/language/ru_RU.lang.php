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

$mod_strings = array(
    'DESC_MODULES_INSTALLED' => 'Были установлены следующие модули:',
    'DESC_MODULES_QUEUED' => 'Готовы к установке следующие модули:',

    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Невозможно определить группу',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Невозможно определить владельца',
    'ERR_UW_CONFIG_WRITE' => 'Ошибка добавления информации о новой версии в config.php.',
    'ERR_UW_CONFIG' => 'Сделайте файл config.php доступным для записи и перезагрузите эту страницу.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Директория не доступна для записи',
    'ERR_UW_FILE_NOT_COPIED' => 'Файл не скопирован',
    'ERR_UW_FILE_NOT_DELETED' => 'Не удалось удалить пакет',
    'ERR_UW_FILE_NOT_READABLE' => 'Файл не может быть прочтён',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Файл не может быть перемещён или записан в',
    'ERR_UW_FLAVOR_2' => 'Устанавливаемая версия: ',
    'ERR_UW_FLAVOR' => 'Текущая версия SuiteCRM: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log не может быть создан/записан.  Пожалуйста, установите соответствующие права доступа на директорию SuiteCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'Значение параметра mbstring.func_overload больше 1. Пожалуйста, измените это значение в файле php.ini и перезагрузите веб-сервер.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Пожалуйста, укажите файл и попробуйте ещё раз!',
    'ERR_UW_NO_FILES' => 'Ошибка: не найдены файлы для проверки.',
    'ERR_UW_NO_MANIFEST' => 'В архиве отсутствует файл manifest.php.  Операция не может быть продолжена.',
    'ERR_UW_NO_VIEW' => 'Указана неверная страница.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Неверная загрузка.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Невозможно создать временную директорию. Убедитесь, что для этого достаточно прав.',
    'ERR_UW_ONLY_PATCHES' => 'На этой странице вы можете загружать только обновления.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Обнаружены ошибки при предварительной проверке',
    'ERR_UW_UPLOAD_ERR' => 'Ошибка загрузки файла, Пожалуйста, попробуйте ещё раз!<br>\n',
    'ERR_UW_VERSION' => 'Версия SuiteCRM: ',
    'ERR_UW_PHP_VERSION' => 'Версия PHP: ',
    'ERR_UW_SUITECRM_VERSION' => 'Версия SuiteCRM: ',
    'ERR_UW_WRONG_TYPE' => 'Неверная страница',
    'LBL_BUTTON_BACK' => '< Назад',
    'LBL_BUTTON_CANCEL' => 'Отмена',
    'LBL_BUTTON_DELETE' => 'Удаление пакета',
    'LBL_BUTTON_DONE' => 'Готово',
    'LBL_BUTTON_EXIT' => 'Выход',
    'LBL_BUTTON_INSTALL' => 'Обновление',
    'LBL_BUTTON_NEXT' => 'Вперёд >',
    'LBL_BUTTON_RECHECK' => 'Проверить',
    'LBL_BUTTON_RESTART' => 'Перезапустить',

    'LBL_UPLOAD_UPGRADE' => 'Загрузка пакета обновления ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Резервная копия',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Резервные файлы этого обновления могут быть найдены в',
    'LBL_UW_BACKUP' => 'Создание резервной копии',
    'LBL_UW_CANCEL_DESC' => 'Обновления было остановлено. Все временные файлы, а также файлы, загруженные в процессе обновления, были удалены.',
    'LBL_UW_CHECK_ALL' => 'Проверить все',
    'LBL_UW_CHECKLIST' => 'Стадии обновления',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => "Резервные копии перезаписываемых файлов находятся в директории: \n",
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => "Необходимо вручную перезаписать следующие файлы:\n",
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Обновление: перезаписать файлы вручную',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Пожалуйста, для перезаписи файлов используйте наиболее удобный для вас способ. Пока вы этого не сделаете, система будет находиться в нестабильном состоянии и обновление не будет завершено.',
    'LBL_UW_COMPLETE' => 'Выполнено',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Все системные требования выполнены',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'Настройка PHP: Call Time Pass By Reference',
    'LBL_UW_COMPLIANCE_CURL' => 'Модуль cURL',
    'LBL_UW_COMPLIANCE_IMAP' => 'Модуль IMAP',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'Модуль MBStrings ',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'Параметр MBStrings mbstring.func_overload',
    'LBL_UW_COMPLIANCE_MEMORY' => 'Настройки PHP: Максимальный размер используемой памяти',
    'LBL_UW_COMPLIANCE_STREAM' => 'Параметры PHP: Stream',
    'LBL_UW_COMPLIANCE_MYSQL' => 'Минимальная версия MySQL ',
    'LBL_UW_COMPLIANCE_DB' => 'Минимальная версия БД',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Расположение php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Минимальная версия PHP',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'Настройка PHP: Safe Mode',
    'LBL_UW_COMPLIANCE_TITLE' => 'Проверка настроек сервера',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Обнаруженные настройки',
    'LBL_UW_COMPLIANCE_XML' => 'Парсинг XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Поддержка Zip',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'Версия PCRE',

    'LBL_UW_COPIED_FILES_TITLE' => 'Скопированные файлы',

    'LBL_UW_DB_CHOICE1' => 'Выполнение SQL-запроса мастером обновления',
    'LBL_UW_DB_CHOICE2' => 'Выполнение SQL-запроса вручную',
    'LBL_UW_DB_ISSUES_PERMS' => 'Привилегии базы данных',
    'LBL_UW_DB_ISSUES' => 'База данных',
    'LBL_UW_DB_METHOD' => 'Метод обновления базы данных',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Все привилегии доступны',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Необходимая привилегия',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Были установлены следующие пакеты обновления:',
    'LBL_UW_END_LOGOUT_PRE' => 'Обновление завершено.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Нажмите на кнопку <b>Готово</b> для выхода из мастера обновления.',
    'LBL_UW_END_LOGOUT' => 'Если вы планируете установить ещё один пакет обновления - выйдите и войдите в систему заново.',

    'LBL_UW_FILE_DELETED' => " были удалены.<br>",
    'LBL_UW_FILE_GROUP' => 'Группа',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Права доступа к файлам',
    'LBL_UW_FILE_ISSUES' => 'Версии файла',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Все файлы доступны для записи</b>',
    'LBL_UW_FILE_OWNER' => 'Владелец',
    'LBL_UW_FILE_PERMS' => 'Права доступа',
    'LBL_UW_FILE_UPLOADED' => ' был загружен',
    'LBL_UW_FILE' => 'Имя файла',
    'LBL_UW_FILES_QUEUED' => 'Следующие пакеты обновления готовы к установке:',
    'LBL_UW_FILES_REMOVED' => "Следующие файлы будут удалены из системы:<br>\n",
    'LBL_UW_NEXT_TO_UPLOAD' => "Нажмите на кнопку <b>Вперед</b> для загрузки пакета обновления.",
    'LBL_UW_FROZEN' => 'Перед тем как продолжить, загрузите пакет обновления.',
    'LBL_UW_HIDE_DETAILS' => 'Скрыть подробности',
    'LBL_UW_IN_PROGRESS' => 'В процессе...',
    'LBL_UW_INCLUDING' => 'Включая',
    'LBL_UW_INCOMPLETE' => 'Не закончено',
    'LBL_UW_MANUAL_MERGE' => 'Перезапись файла:',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Установленных обновлений не обнаружено.',
    'LBL_UW_NONE' => 'Нет',
    'LBL_UW_OVERWRITE_DESC' => "Все измененные файлы будут перезаписаны, включая файлы исходного кода, а так же шаблоны. Продолжить?",

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Создать задачу для перезаписи вручную?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Отправить себе письмо с напоминанием о перезаписи вручную?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Перечисленные файлы будут изменены. Снимите отметки с тех файлов, для которых будет выполнена перезапись вручную. <i>Файлы, не требующие изменения остались неотмеченными; установка отметки приведёт к их перезаписи.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Не требуется перезапись файлов вручную.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Нет необходимости.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Файлы, оставленные без изменений:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Предварительная проверка пройдена успешно. ',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Нажмите на кнопку <i>Вперёд</i> для загрузки файлов обновления в систему.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<i><b>Примечание: </b></i>Оставшаяся часть процесса обновления является обязательной. Нажмите на кнопку <b>Вперед</b> для завершения процесса обновления или на кнопку <b>Отмена</b> для остановки работы мастера обновления.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Перезаписать ВСЕ файлы',

    'LBL_UW_REBUILD_TITLE' => 'Результаты обновления',
    'LBL_UW_SCHEMA_CHANGE' => 'Изменения схемы:',

    'LBL_UW_SHOW_COMPLIANCE' => 'Показать обнаруженные настройки',
    'LBL_UW_SHOW_DB_PERMS' => 'Показать отсутствующие права доступа к базе данных.',
    'LBL_UW_SHOW_DETAILS' => 'Показать подробности',
    'LBL_UW_SHOW_DIFFS' => 'Показать файлы, необходимые для перезаписи вручную',
    'LBL_UW_SHOW_NW_FILES' => 'Показать файлы с недостаточными правами доступа',
    'LBL_UW_SHOW_SCHEMA' => 'Показать скрипт изменения схемы',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Показать некорректные запросы',
    'LBL_UW_SHOW' => 'Показать',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Пропущенные файлы',
    'LBL_UW_SQL_RUN' => 'Проверять, когда запрос был выполнен вручную',
    'LBL_UW_START_DESC' => 'Мастер поможет вам обновить текущую версию системы.',
    'LBL_UW_START_DESC2' => 'Настоятельно рекомендуем перед обновлением системы сделать резервные копии как базы данных, так и файлов SuiteCRM. <br>Как известно, профилактика - лучшее лечение.',
    'LBL_UW_START_DESC3' => 'Нажмите на кнопку <b>Вперёд</b> для выполнения предварительной проверки. В процессе проверки будут проанализированы права доступа к файлам, привилегии базы данных и настройки сервера.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Мастер обновления сейчас продолжит обновление системы.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Добро пожаловать в мастер обновления',

    'LBL_UW_SYSTEM_CHECK_CHECKING' => 'Идёт проверка, пожалуйста, подождите.  Операция может занять порядка 30 секунд.',

    'LBL_UW_TITLE_CANCEL' => 'Отмена',
    'LBL_UW_TITLE_COMMIT' => 'Выполнение обновления',
    'LBL_UW_TITLE_END' => 'Последние штрихи',
    'LBL_UW_TITLE_PREFLIGHT' => 'Предварительная проверка',
    'LBL_UW_TITLE_START' => 'Добро пожаловать',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Проверка системы',
    'LBL_UW_TITLE_UPLOAD' => 'Загрузка пакета',
    'LBL_UW_TITLE' => 'Мастер обновления',
    'LBL_UW_UNINSTALL' => 'Деинсталлировать',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Принять лицензию',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Конвертировать лицензию',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Выполняется начальный этап обновления',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Выполняется проверка системы',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Выполняется проверка лицензии',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Выполняется предварительная проверка',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Выполняется копирование файлов',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Выполняется основной этап обновления',
    'LBL_UW_COMMIT_DESC' => 'Нажмите на кнопку <i>Далее</i> для выполнения дополнительных скриптов обновления.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Выполняются скрипты обновления',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Выполняется заключительный этап обновления',
    'LBL_UPGRADE_IN_PROGRESS' => 'в процессе     ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Затраченное время',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Обновление отменено, немного прибираемся',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Обновление может занять некоторое время',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Выполняется проверка загруженного пакета обновления',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Выполняется загрузка пакета обновления',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Помощник обновления удалил 451 устаревшую схему',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Удалить схему вручную',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Метод очистки старых схем',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Показывать старые схемы, которые можно очистить',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Пропущенные запросы',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Требуется PHP версии 5 или выше.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Текущая версия РНР не поддерживается SuiteCRM.  Необходимо установить версию РНР, которая совместима с устанавливаемой версией приложения. За более подробной информацией обратитесь к таблице совместимости (Compatibility Matrix), находящейся в примечаниях к релизу. Текущая версия РНР - ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'В PHP включён режим обратной совместимости. Для продолжения отключите параметр zend.ze1_compatibility_mode',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Действие',
    'LBL_ML_CANCEL' => 'Отказаться',
    'LBL_ML_COMMIT' => 'Вперёд',
    'LBL_ML_DESCRIPTION' => 'Описание',
    'LBL_ML_INSTALLED' => 'Дата установки',
    'LBL_ML_NAME' => 'Имя',
    'LBL_ML_PUBLISHED' => 'Дата публикации',
    'LBL_ML_TYPE' => 'Тип',
    'LBL_ML_UNINSTALLABLE' => 'Деинсталляция',
    'LBL_ML_VERSION' => 'Версия',
    'LBL_ML_INSTALL' => 'Установить',
    //adding the string used in tracker. copying from homepage
    'LBL_HOME_PAGE_4_NAME' => 'Трекер',
    'LBL_CURRENT_PHP_VERSION' => 'Текущая версия PHP: ',
	'LBL_RECOMMENDED_PHP_VERSION_1' => 'Рекомендуется версия ',
	'LBL_RECOMMENDED_PHP_VERSION_2' => ' или выше.', // End of a sentence as in Recommended PHP version or above

    'LBL_MODULE_NAME' => 'Мастер обновления',
    'LBL_UPLOAD_SUCCESS' => 'Пакет обновления успешно загружен. Нажмите на кнопку <i>Вперед</i> для выполнения предварительной проверки.',
    'LBL_UW_TITLE_LAYOUTS' => 'Обновление макетов',
    'LBL_LAYOUT_MODULE_TITLE' => 'Макет',
    'LBL_LAYOUT_MERGE_DESC' => 'В пакете обновления присутствуют новые поля, которые могут быть автоматически добавлены в существующие макеты модулей. Дополнительная информация о новых полях содержится в  примечаниях к релизу текущего обновления. <br><br>Если вы не желаете добавлять новые поля к существующим макетам модулей - оставьте соответствующие элементы списка модулей неотмеченными. Новые поля будут доступны в Студии обновленной версии системы. <br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'Нажмите на кнопку <i>Вперёд</i> для применения указанных изменений.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Нажмите на кнопку <i>Вперёд</i> для завершения процесса обновления.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Обновление макетов',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Результат обновления макетов',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Следующие макеты были успешно обновлены:',
    'LBL_SELECT_FILE' => 'Выберите файл:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Загружаемый файл не совместим с текущей версией SuiteCRM: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'Загруженный файл не совместим с текущей версией PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Загруженный файл не совместим в текущей версией SuiteCRM: ',
    'ERROR_FLAVOR_INCOMPATIBLE' => 'Загружаемый файл не совместим с текущей версией SuiteCRM: ',
    'LBL_LANGPACKS' => 'Языковые пакеты' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Загрузчик модулей' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Обновления системы' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Темы' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Обновление' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Выполнение' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'В файле manifest.php не указана совместимая версия',
    'LBL_UPGRD_CSTM_CHK' => 'Процесс обновления затронет несколько файлов, но эти файлы также присутствуют в пользовательском каталоге. Пожалуйста, проверьте изменения перед тем, как продолжить:', // PR 3653
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'Размер загружаемого файла превышает значение, указанное в параметре upload_max_filesize файла php.ini.',
        2 => 'Размер загружаемого файла превышает значение, указанное в параметре MAX_FILE_SIZE HTML-формы.',
        3 => 'Загруженный файл был загружен лишь частично.',
        4 => 'Файл не был загружен.',
        5 => 'Неизвестная ошибка.',
        6 => 'Отсутствует папка для временных файлов.',
        7 => 'Невозможно записать файл на диск.',
        8 => 'Загрузка файла была прервана.',
    ),
);
