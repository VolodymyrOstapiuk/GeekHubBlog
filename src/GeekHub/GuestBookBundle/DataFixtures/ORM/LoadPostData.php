<?php
namespace GeekHub\GuestBookBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use GeekHub\GuestBookBundle\Entity\Post;

class LoadPostData extends AbstractFixture
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $post = new Post();
        $post->setName('Как обратиться к функции из другого файла');
        $post->setEmail('user@example.com');
        $post->setContent(
            'Добрый день. Как можно обратиться к функции из другого файла php ТоЛЬКО не используя функции require_once/ include_once? Просто как я поняла данные функции просто подставляют (копируют) код из тех файлов в файл в котором были вызваны, а мне этого не надо. Нужно всего навсего одну функцию вызвать из файла.
            '
        );
        $post->setDescription();
        $manager->persist($post);
        $post = new Post();
        $post->setName('Организация URL адресов');
        $post->setEmail('user1@example.com');
        $post->setContent(
            'Добрый день.
            Столкнулся с такой проблемой ...
            Как правильно организовать URL ?
            Допустим есть сайт ... www.site.com
            есть меню menu1, menu2, menu3, menu 4 и т.д.
            '
        );
        $post->setDescription();
        $manager->persist($post);
        $post = new Post();
        $post->setName('"а в htaccess стоит перенаправление"');
        $post->setEmail('user2@example.com');
        $post->setContent(
            'Господа, я совершенный новичок в веб-приложениях и мне представляется место файла htaccess как какого-нибудь ini-файла лежащего в папке и отвечающего за ее представление, разрешения и запрещения операций.
            '
        );
        $post->setDescription();
        $manager->persist($post);
        $post = new Post();
        $post->setName('MVC / Сложный уровень');
        $post->setEmail('user3@example.com');
        $post->setContent(
            'Всем добра! На сегодняшний день у меня имеется сложный функциональный проект социальной сети. Это блоги, анкеты, файлы, почта и всякие другие фишки. Вся эта система написана от балды, можно сказать. Под каждую страницу создается файл, обрабатываются данные и там же выводится HTML-код.

            По мере развития проекта, мне становится сложно его расширять и редактировать.

            Но я пошел на путь исправления. В данный момент обдумываю структуру нового сайта. Буду писать с нуля по четко определенным правилам.

            ООП я уже понял. Это не сложно, с учетом того, что я около года программировал с C++.

            Теперь осталось понять как всю эту структуру удобно распределить... И тут я нашел MVC. Но столкнулся с очередной трудностью... Все примеры MVC-приложений написаны на легких примерах типа сайта-визитки и простого вывода "Hello, world". Мне это не подходит. Я даже не понимаю как создать такие сложные модули, вроде внутренней почты.

            Расскажите, пожалуйста, как вы изучили MVC? Есть ли по этому паттерну книжки? Я искал, не нашел.
            '
        );
        $post->setDescription();
        $manager->persist($post);
        $post = new Post();
        $post->setName('PHP OOP, PDO и "прерывание" операций');
        $post->setEmail('user4@example.com');
        $post->setContent(
            'Доброго времени суток!
            В названии темы проблему вложить не получилось, т.к. даже не знаю как правильно ее обозвать
            Суть в чем - делаю скрипт бэкапа БД на PHP с использованием ООП и PDO, на небольших базах работает прекрасно (тестировал на сайтах визитках, форумах и порталах), но при попытке использовать для больших баз (интернет-магазины, более 15 000 товаров, кучей заказов и т.д.) в определенный момент начинает выползать ошибка вида "Fatal error: Allowed memory size of xxxxxx bytes exhausted (tried to allocate xxxxxx bytes)", отсюда вопрос, как можно сделать это с небольшими перерывами? Или как-нибудь иначе, главное, чтобы не падал с ошибками.
            Главная страница:

            '
        );
        $post->setDescription();
        $manager->persist($post);
        $post = new Post();
        $post->setName('Литература ООП и MVC');
        $post->setEmail('user5@example.com');
        $post->setContent(
            'Здравствуйте, поставил себе цель за лето выучить php, mvc, oop , если есть возможность ссылки на литературу
            для электронной книги ( форматы ePub, PDF, TXT, RTF, fb2). Уже практиковался во всех этих сферах получается довольно не плохо, но все равно практика без теорий, не есть хорошо ). Буду вам очень благодарен.
            '
        );
        $post->setDescription();
        $manager->persist($post);
        $post = new Post();
        $post->setName('Интересует структура в ООП');
        $post->setEmail('user6@example.com');
        $post->setContent(
            'Добрый вечер! Вот сижу щас и прогаю на kohana. И сразу возник вопрос... В kohana я весь код пишу именно где то в каком нибудь классе и потом это все обрабатывается и выводится. Но как для новичков читать уроки везде говорится "создаешь класс, потом экземпляр класса и через него уже обращаешься к методам этого класса" однако тут совсем не так. Как реализуется такой процесс при котором ты пишешь в классе и сразу же все выводится?

            '
        );
        $post->setDescription();
        $manager->persist($post);
        $post = new Post();
        $post->setName('"Паттерн mvc');
        $post->setEmail('user7@example.com');
        $post->setContent(
            'Всем привет.
            Изучаю PHP, а также ООП в PHP, само ООП изучал еще в делфи, так что тут проблем не возникло.
            Вот решил попробовать написать что нить с использованием паттерна mvc, но никак не пойму его суть...
            Нашел много примеров (один из них http://habrahabr.ru/post/150267/ ) скачал, запустил у себя, посмотрел код, но никак не пойму, как реализовать например регистрацию или авторизацию... + посмотрев пример с хабры появилась мысль что можно без ооп реализовать структуру mvc, прописывая в моделях просто функции работы с бд и потом их вызывать. Не подскажите какие нибудь статейки без тега "для новичков", ибо в примере из хабры много комментариев типо "тут можно вставить какие нибудь функции для работы с бд", а также имеются непонятные пустые функции...
            И еще по поводу маршрутизатора на хабре вносили изменение в .htaccess, но насколько я понял не на всех хостингах стоит апач, как можно реализовать без .htaccess, а также без такого объемного маршрутизатора, я так понял он там для чпу?
            '
        );
        $post->setDescription();
        $manager->persist($post);
        $post = new Post();
        $post->setName('Класс для ведения лог-файла с ошибками');
        $post->setEmail('user8@example.com');
        $post->setContent(
            'Есть у кого нибудь пример класса, который ведёт лог в файл, и записывает туда все ошибки, которые возникали у пользователя?(даже самые незначительные)?
            Сколько копаюсь, всё не то нахожу, хочу посмотреть хотя-бы примерную реализацию, и вообще понять что она из себя представляет.
            Спасибо.
            '
        );
        $post->setDescription();
        $manager->persist($post);
        $post = new Post();
        $post->setName('Построение классов');
        $post->setEmail('user9@example.com');
        $post->setContent(
            'Добрый день! Пытаюсь реализовать проект в ООП.
            Задача стоит следующая:
            1) Есть некоторые статистические таблицы(10-20 полей), которые заполняют пользователи
            2) На основе введенных данных рассчитываются некоторые показатели (обычно что-то делится на что-то и выражается в %, хотя некоторые берутся напрямую от пользователей)
            3) Дальше эти данные показатели обрабатываются, выставляются баллы и выстраивается рейтинг.

            Для 1) создал для каждой таблицы свою сущность с полями показателями(хотя это мне тоже не нравится, почему-то кажется что нужно создавать сущности "Показатель", а потом их как-то агрегировать в сущность "Таблица")

            Теперь не знаю как реализовать 2) - то ли нужно расширить в 1) добавив расчетные показатели или наследовать как-то или создавать новый класс и передавать например в конструктор...

            3) нужно как-то привязать к каждому расчетному показателю баллы и алгоритм выставления баллов.

            '
        );
        $post->setDescription();
        $manager->persist($post);
        $manager->flush();
    }
}
