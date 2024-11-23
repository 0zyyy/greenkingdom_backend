export default function counter() {
    return {
        count: 0,
        increment() {
            this.count++;
        },
        decrement() {
            this.count--;
        },
    };
}

