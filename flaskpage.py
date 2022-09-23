from flask import Flask,render_template
app = Flask(__name__)

@app.route('/')
def hellow_world():
    return render_template('cart.html')
@app.route('/products')
def products():
    return 'this is product page'    

if __name__=="__main__":
    app.run(debug=True)    