# 其他模式

## 组合模式 p356
可以把相同操作应用在组合和个别对象上，客户可以忽略对象组合和个别对象的差异
![image](https://github.com/yantianpi/designMode/raw/master/other/composite.png)

## 责任链模式 p616
想让一个以上对象有机会能够处理某个请求的时候，可以考虑使用责任链模式
![image](https://github.com/yantianpi/designMode/raw/master/other/cor.png)
* 优点 请求者和接收者解耦；通过改变链内的成员或调动他们的次序，允许动态新增或删除责任
* 缺点 请求不能保证一定会被执行，请求可能会落到链尾；不容易观察运行时的特征，不方便排错
* 用途 经常被用到窗口系统中，处理鼠标或键盘事件

## 生成器模式 p614
封装一个产品的构造过程，并允许按步骤构造
![image](https://github.com/yantianpi/designMode/raw/master/other/builder.png)
* 优点 封装复杂对象的创建过程；允许对象通过多个步骤创建，并且可以改变过程（工厂模式主要区别）；向客户隐藏产品内部实现
* 用途 经常被用来创建组合结构

## 蝇量模式(享元模式) p618
一个实例保存虚拟对象属性集合，一个虚拟对象实例，负责行为，属性从外部获取
![image](https://github.com/yantianpi/designMode/raw/master/other/flyweight.png)
* 优点 减少运行时对象实例个数，节省内存开销；许多“虚拟”对象属性集中管理
* 缺点 单个虚拟实例因此不能拥有独立而不同的行为
* 用途 一个类需要大量实例，这些实例能被同一方法控制（大型规划社区景观设计）

## 中介者模式 p622
对象之间解耦，通过一个中介完成沟通和控制
![image](https://github.com/yantianpi/designMode/raw/master/other/mediator.png)
* 优点 对象之间解耦，增加复用性；控制逻辑集中在中介者，简化系统维护；对象之间通过中介者传递消息简单
* 缺点 中介者如果设计不好，本身会变得过于复杂
* 用途 中介者常常用来协调相关gui组件

## 原型模式 p626
生成基本的实例，然后通过实例的copy或clone方法，返回一个叠加属性功能的新实例
![image](https://github.com/yantianpi/designMode/raw/master/other/prototype.png)
* 优点 隐藏实例的复杂性；有些时候，复制对象比创建对象更有效
* 缺点 对象的复制有时会很复杂

## 访问者模式 p628
![image](https://github.com/yantianpi/designMode/raw/master/other/visitor.png)
* 优点 允许对组合加入新的操作，而不需要改变结构本身；访问者进行的操作集中在一起
* 缺点 打破组合类的封装；

## 参考书籍

![image](https://github.com/yantianpi/designMode/raw/master/structure.png)
