<?php

interface Sportsmen
{
    public function run();

    public function gym();

    public function eat();
}

class Gymnast implements Sportsmen
{

    public function run()
    {
        echo 'im running';
    }

    public function gym()
    {
        echo 'im gym';
    }

    public function eat()
    {
        echo 'im eat';
    }
}


// Домашка
interface Airoport
{
    public function zapravka();
    public function polet();
    public function posadka();
    public function vzlet();
}

//ЧТОБЫ УБРАТЬ ОШИБКУ ПРИ ИМПЛЕМЕНТС ОТ ИНТЕРФЕЙСА ЗАЖИМАЕШЬ Alt+ENTER и жмешь дальше ENTER
class Airoflot implements Airoport {

    public function zapravka()
    {
        echo 'im zapravliyaus';
    }

    public function polet()
    {
        echo 'im lechy';
    }

    public function posadka()
    {
        echo 'im zaguz';
    }

    public function vzlet()
    {
        echo 'im wzletayi';
    }
}