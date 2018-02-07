# 命令模式

## 意图

将请求封装成对象，这可以让你使用不同的请求、队列，或者日志请求来参数化其他对象，支持撤销操作。p191

## 结构图

![image](https://github.com/yantianpi/designMode/raw/master/command/structure.png)

## 命令中角色介绍

* 抽象命令（Command）角色，声明一个抽象接口，提供命令公用接口方法execute
* 具体命令（ConcreteCommand）角色，包含接收者对象，实现Command的接口，接口方法execute中调用接收者的一系列动作
* 客户（Client）角色，创建具体命名对象并确定接收者
* 请求调用者（Invoker）角色，负责调用命令对象执行请求
* 接收者（Receiver）角色，负责具体实施某些动作，

## 优点

* 发出请求的对象和执行具体请求解耦和（通过面向接口编程）
* 宏命令，命令对象聚合在一起，合成一个命令（比如家里的控制灯的遥控，有单开关，也有一个总开关）
* 容易扩展新命令，只需要一个具体命令对象和一个具体接收者就可以了，满足开闭原则
* 支持撤销（抽象命令提供undo接口方法）

## 缺点

* 具体命令类可能会比较多

## 适用场景

* 实现队列请求（某端添加命名，，另一端是线程，线程进行如下操作:从队列中取出命令，调用命令的execute方法，执行完后，丢弃此命令，再去取下一个命令）
* 日志请求（执行命令的时候，将历史记录存储在磁盘中，一旦系统死机，我们就可以将命令对象重新加载，成批一次调用这些对象的execute方法）
* 事务系统


## 与其他模式对比

* 合成模式
* 原型模式

[参考](http://www.phppan.com/2010/08/php-design-pattern-15-comman/)