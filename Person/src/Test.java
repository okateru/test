
public class Test {
	public static void main(String[] args) {
		Person taro = new Person();
		Person jiro = new Person();
		Person hanako = new Person();
		Person terumasa = new Person();
		Robot aibo = new Robot();
		Robot asimo = new Robot();
		Robot pepper = new Robot();

		taro.name = "山田太郎";
		taro.age = 20;
		taro.phoneNumber = "000";
		taro.address = "111";

		jiro.name = "木村次郎";
		jiro.age = 18;
		jiro.phoneNumber = "222";
		jiro.address = "333";

		hanako.name = "鈴木花子";
		hanako.age = 16;
		hanako.phoneNumber = "444";
		hanako.address = "555";

		terumasa.name = "岡崎央将";
		terumasa.age = 29;
		terumasa.phoneNumber = "666";
		terumasa.address = "777";

		aibo.name="aibo";
		asimo.name="asimo";
		pepper.name="pepper";

		System.out.println(taro.name);
		System.out.println(taro.age);
		System.out.println(taro.phoneNumber);
		System.out.println(taro.address);
		taro.talk();
		taro.walk();
		taro.run();

		System.out.println(jiro.name);
		System.out.println(jiro.age);
		System.out.println(jiro.phoneNumber);
		System.out.println(jiro.address);
		jiro.talk();
		jiro.walk();
		jiro.run();

		System.out.println(hanako.name);
		System.out.println(hanako.age);
		System.out.println(hanako.phoneNumber);
		System.out.println(hanako.address);
		hanako.talk();
		hanako.walk();
		hanako.run();

		System.out.println(terumasa.name);
		System.out.println(terumasa.age);
		System.out.println(terumasa.phoneNumber);
		System.out.println(terumasa.address);
		terumasa.talk();
		terumasa.walk();
		terumasa.run();

		aibo.tolk();
		aibo.walk();
		aibo.run();

		asimo.tolk();
		asimo.walk();
		asimo.run();

		pepper.tolk();
		pepper.walk();
		pepper.run();
	}
}
