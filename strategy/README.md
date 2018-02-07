# 策略模式

## 意图

定义算法族，分别封装起来，让他们之间可以相互替换(接口形式)，此模式让算法的变化独立于使用算法的客户。策略模式变化的是算法。p2

## 结构图

![image](https://github.com/yantianpi/designMode/raw/master/strategy/structure.png)

## 策略中角色介绍

* 具体策略（ConcreteStrategy）角色，以Strategy接口实现某具体算法。
* 抽象策略（Strategy）角色，定义所有支持的算法的公共接口，通常用接口或抽象类来实现，Context使用这个接口来调用ConcreteStrategy定义的算法。
* 环境（Context）角色，持有一个Strategy的引用，用ConcreteStrategy对象来配置

## 策略优点

* 算法封装在独立的Strategy中，可以独立于Context改变它

## 策略缺点

* 客户需要了解所有的策略
* 策略模式会新增很多策略类

## 适用场景

* 需要使用一个算法的不同变体，比如鸭子的叫声（咕咕叫，吱吱叫，不叫。。。）

## 与其他模式对比

* 与模板方式模式，模板方式模式以继承的方式提供不同的算法行为；策略模式使用委托的方式提供不同的算法行为

[参考](http://www.phppan.com/2010/07/php-design-pattern-12-strategy/)