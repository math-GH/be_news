# be_news
Contao CMS (http://contao.org) Erweiterung, die die News-Liste im Backend anpassbar macht.
So können zum Beispiel weitere Informationen (Bild, Autor, Anhang usw.) direkt in der News-Liste angezeigt werden.
Das Template be_news.html5 kann bearbeitet werden


Contao CMS (http://contao.org) Extension. Customize the list of news in backend and show more information (f.e. picture, attachment, author etc.)
Backend-template: be_news.html5

![](/assets/be_news.jpg)

##Templates
###original (default Contao core)
```php
  <?= $this->template['headline']?>
  <span style="color:#b3b3b3;padding-left:3px">
    [<?= Date::parse(Config::get('datimFormat'), $this->template['date']) ?>]
  </span>
```  
###be_news.html5
```php
<span 
    title="<?= Date::parse(Config::get('datimFormat'), $this->template['date']) ?>" 
    style="border-width: 3px 1px 1px; border-style: solid; border-color: red black black; width: 14px; display: inline-block; text-align: center; margin-right: 5px; font-size: 0.7em; background-color: white; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; font-weight: bold;
    ">
        <?=Date::parse('d', $this->template['date']) ?>
</span>
<?= $this->template['headline'] ?>
```

### $this->template[]
```php
Array
(
    [id] => 
    [pid] => 
    [tstamp] => 
    [headline] => 
    [alias] => 
    [author] => 
    [date] => 
    [time] => 
    [subheadline] => 
    [teaser] => 
    [addImage] => 
    [singleSRC] => 
    [alt] => 
    [size] => 
    [imagemargin] =>
    [imageUrl] => 
    [fullsize] => 
    [caption] => 
    [floating] => 
    [addEnclosure] => 
    [enclosure] =>
    [source] => 
    [jumpTo] => 
    [articleId] => 
    [url] => 
    [target] => 
    [cssClass] => 
    [noComments] => 
    [featured] => 
    [published] => 
    [start] => 
    [stop] => 
    [tags] => 
)
```
