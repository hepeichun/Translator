# Translator

## 支持转换列表
- xml
- json
- url
- serialize


## 提供方法
### Translator->to
```
to(string $original , string $format, mixed $msg)
```
#### $original
- 来源格式

#### $format
- 目标格式

#### $msg
- 需要抓换的消息

#### 返回值
- 变成目标格式


#### 例子Json转xml：
```php
$json = '{"id":"1682333591565606218","wfr":"spider","for":"pc"}';
$translator = new \jdkysq\Translator\Translator();
$ret = $translator->to('json','xml',$json);
/**
 * <?xml version="1.0" encoding="UTF-8"?><root><id>1682333591565606218</id><wfr>spider</wfr><for>pc</for></root>
 */
var_dump($ret);
```
### Translator->isFormat
```
isFormat(string $format)
```
主要用作检测某种格式是否支持
#### $format
- 目标格式

#### 返回值
- true 或者 false
- true 支持
- false 不支持


#### 例子Json转xml：
```php
$translator = new \jdkysq\Translator\Translator();
$ret = $translator->isFormat('xml');
var_dump($ret); //true
```

