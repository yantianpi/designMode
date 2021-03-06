# 设计模式

## OO原则

* 封装变化
* 多用组合，少用继承
* 针对接口编程，不针对实现编程
* 为交互对象之间的松耦合设计而努力
* 开闭原则，对扩展开放，对修改关闭
* 依赖倒置原则，依赖抽象，不要依赖具体类
* 最少知识原则，不让太多类耦合在一起，以免修改系统一部分，会影响到其他部分
* 单一责任原则，一个责任只指派给一个类

## 模式类表

* 备忘录模式 备份对象某时刻的状态，存储在外部，需要时还原对象状态（打游戏中的存储游戏多个进度）
* 策略模式 多个算法，对外一个接口，用户可以根据需要切换（鸭子的叫声，吱吱叫，不会叫，咕咕叫）
* 模板方法模式 流程、系统、算法整体骨架固定，分步骤执行，部分步骤可供子类修改
* 观察者模式 一个对象需要根据另一个对象的改变作出一些操作，需要监控改变（微博订阅，公众号订阅）
* 工厂模式（简单工厂，工厂方法，抽象工厂） 工厂生产一类产品，客户从具体产品中解耦
* 单例模式（饱汉式，饿汉式）一个类只有一个实体
* 适配器模式 对象之间存在差异，使用一个转换，使得客户能像老接口那样使用新对象（三孔插座适配两空插座）
* 门面模式（外观模式） 集成复杂子系统，对外提供简单的使用方式（播放家庭影院）
* 装饰者模式 包含已有产品，在产品上附加操作（咖啡，加摩卡，加奶泡，加豆浆）
* 命令模式 解耦请求发出者和具体执行者
* 状态模式 对象中的操作根据对象的状态不同而不同，状态模式让修改局部化，某一状态中的对象操作修改不影响其他状态（糖果机的未投币，已投币，售糖果，售罄状态下的操作投币，转动曲柄，吐币操作）
* 迭代器模式 单一责任原则，提供一致的方式顺序访问聚合内的各个对象，而不暴露对象在聚合中的表示（数组，list，hashtable）

## 其他模式

* 组合模式（合成模式）允许将对象组合成树形结构来表现整体和部分层次结构，组合能让客户以一致的方式处理个别对象以及组合对象
* 责任链模式 创建一个对项链，请求过来时，对项链每个对象依序检查这个请求，或者处理这个请求，或者把请求转给对项链中下一个对象
* 生成器模式（建造者模式） 封装一个产品的构造过程，并允许按步骤构造
* 蝇量模式（享元模式） 使用一个类的一个实例能提供许多“虚拟实例”（通过保存虚拟实例的属性集合，虚拟实例类负责行为），目的通过共享减少实例开销
* 中介者模式 对象之间的沟通和控制通过一个中介完成，对象之间解耦
* 原型模式 创建给定类的实例的过程很昂贵或很复杂或者暂时不能确定具体的实例的时候，可以先创建对象的种类
* 访问者模式 当想为一个对象的组合增加新的能力，且封装并不重要时，可以使用访问者模式


## 参考书籍

![image](https://github.com/yantianpi/designMode/raw/master/structure.png)
