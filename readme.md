# Ru

## Что это

Это набор функций для изменения формы слов в русском языке

## Установка

`composer require landlib/ruslexicon`

или

`git clone https://github.com/lamzin-andrey/ruslexicon`

## Использование

```php
use Landlib\RusLexicon;

echo RusLexicon::getMeasureWordMorph(4, 'день', 'дня', 'дней') . "\n";   //> дня
echo RusLexicon::getMeasureWordMorph(1, 'день', 'дня', 'дней') . "\n";   //> день
echo RusLexicon::getMeasureWordMorph(129, 'день', 'дня', 'дней') . "\n"; //> дней
echo RusLexicon::getMeasureWordMorph(0, 'день', 'дня', 'дней') . "\n";   //> дней
```

# En

## About

#Это набор функций для изменения формы слов в русском языке
This functions scope for transform word in Russian Language. For example, in Russian language mesure unit may change depends of value.
In English Language phrases "four days",  "twenty one days" always have the last word "days", but in Russian Language this phrases
will can different last words.

## Installation

`composer require landlib/ruslexicon`

or

`git clone https://github.com/lamzin-andrey/ruslexicon`

## Usage

```php
use Landlib\RusLexicon;

echo RusLexicon::getMeasureWordMorph(4, 'day', 'days', 'days') . "\n";   //> days
echo RusLexicon::getMeasureWordMorph(1, 'day', 'days', 'days') . "\n";   //> day
echo RusLexicon::getMeasureWordMorph(129, 'day', 'days', 'days') . "\n"; //> days
echo RusLexicon::getMeasureWordMorph(0, 'day', 'days', 'days') . "\n";   //> days
```
