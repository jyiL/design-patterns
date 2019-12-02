### 工厂模式
最常用的实例化对象的模式 用工厂方法代替 new 关键字来实例化对象操作的模式
返回的对象是没有关系的, 而单例模式始终返回的是同一个对象
好处: 比如更改实例化类名的时候, 只需要修改工厂方法里面的内容去实例化的这个类名, 
而不需要在你的代码中寻找具体实例化的地方再单独的进行修改. 提供灵活的动态扩展机制,减少我们代码的耦合性

### PHP工厂模式
* [简单工厂模式](SimpleFactory)
* [工厂方法模式]()
* [抽象工厂模式](AbstractFactory)