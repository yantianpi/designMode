# 适配器模式

## 意图

将一个类的接口，转化成客户期望的另外一个接口，Adapter使得原本接口不兼容的类可以一起合作

## 结构图

![image](https://github.com/yantianpi/designMode/raw/master/adapter/structure.png)

## 适配器中角色介绍

* 目标（Target）角色，客户端使用的一个已知的特定领域的接口。
* 源（Adaptee）角色，需要进行适配的接口，客户想使用它，但是不关心他的使用方法。
* 适配器（Adaptee）角色，对Adaptee的接口和Target接口进行适配，使得客户可以用Target的使用方式使用Adaptee。

## 类适配器与对象适配器

* 类适配器，Adapter与Adaptee是继承关系。适配器如果想要适配Adaptee的子类行为，理论上做不到。不需要重新实现整个被适配者，因为用到了继承
* 对象适配器 Adapter与Adaptee是委托关系。适配器可以与多个Adaptee工作，也可以扩展Adaptee功能。理论上重新定义Adaptee的已有行为比较困难

## 适用场景

* 想使用一个已经存在的类，但是它的接口不符合要求，需要适配它的接口


## 与其他模式对比

[参考](http://www.phppan.com/2010/07/php-design-pattern-10-adapter/)