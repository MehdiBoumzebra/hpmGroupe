/**
 * based on open source code found at:
 * http://www.macromedia.com/devnet/mx/flash/articles/adv_draw_methods.html
 * http://www.polymercode.com/blogs-listed-by-category/object-oriented-design/
 * This code can be used in open 
 */
class com.drawing.roundedRec {
	private function Draw() {
	}
	public static function roundedRectangle(target:MovieClip, x:Number, y:Number, width:Number, height:Number, cornerRadius:Number):Void {
		if (arguments.length<5) {
			return;
		}
		if (cornerRadius == undefined) {
			cornerRadius = 0;
		}
		if (cornerRadius>0) {
			var theta, angle, cx, cy, px, py;
			if (cornerRadius>Math.min(width, height)/2) {
				cornerRadius = Math.min(width, height)/2;
			}
			theta = Math.PI/4;
			target.moveTo(x+cornerRadius,y);
			target.lineTo(x+width-cornerRadius,y);
			angle = -Math.PI/2;
			cx = x+width-cornerRadius+(Math.cos(angle+(theta/2))*cornerRadius/Math.cos(theta/2));
			cy = y+cornerRadius+(Math.sin(angle+(theta/2))*cornerRadius/Math.cos(theta/2));
			px = x+width-cornerRadius+(Math.cos(angle+theta)*cornerRadius);
			py = y+cornerRadius+(Math.sin(angle+theta)*cornerRadius);
			target.curveTo(cx,cy,px,py);
			angle += theta;
			cx = x+width-cornerRadius+(Math.cos(angle+(theta/2))*cornerRadius/Math.cos(theta/2));
			cy = y+cornerRadius+(Math.sin(angle+(theta/2))*cornerRadius/Math.cos(theta/2));
			px = x+width-cornerRadius+(Math.cos(angle+theta)*cornerRadius);
			py = y+cornerRadius+(Math.sin(angle+theta)*cornerRadius);
			target.curveTo(cx,cy,px,py);
			target.lineTo(x+width,y+height-cornerRadius);
			angle += theta;
			cx = x+width-cornerRadius+(Math.cos(angle+(theta/2))*cornerRadius/Math.cos(theta/2));
			cy = y+height-cornerRadius+(Math.sin(angle+(theta/2))*cornerRadius/Math.cos(theta/2));
			px = x+width-cornerRadius+(Math.cos(angle+theta)*cornerRadius);
			py = y+height-cornerRadius+(Math.sin(angle+theta)*cornerRadius);
			target.curveTo(cx,cy,px,py);
			angle += theta;
			cx = x+width-cornerRadius+(Math.cos(angle+(theta/2))*cornerRadius/Math.cos(theta/2));
			cy = y+height-cornerRadius+(Math.sin(angle+(theta/2))*cornerRadius/Math.cos(theta/2));
			px = x+width-cornerRadius+(Math.cos(angle+theta)*cornerRadius);
			py = y+height-cornerRadius+(Math.sin(angle+theta)*cornerRadius);
			target.curveTo(cx,cy,px,py);

			target.lineTo(x+cornerRadius,y+height);

			angle += theta;
			cx = x+cornerRadius+(Math.cos(angle+(theta/2))*cornerRadius/Math.cos(theta/2));
			cy = y+height-cornerRadius+(Math.sin(angle+(theta/2))*cornerRadius/Math.cos(theta/2));
			px = x+cornerRadius+(Math.cos(angle+theta)*cornerRadius);
			py = y+height-cornerRadius+(Math.sin(angle+theta)*cornerRadius);
			target.curveTo(cx,cy,px,py);
			angle += theta;
			cx = x+cornerRadius+(Math.cos(angle+(theta/2))*cornerRadius/Math.cos(theta/2));
			cy = y+height-cornerRadius+(Math.sin(angle+(theta/2))*cornerRadius/Math.cos(theta/2));
			px = x+cornerRadius+(Math.cos(angle+theta)*cornerRadius);
			py = y+height-cornerRadius+(Math.sin(angle+theta)*cornerRadius);
			target.curveTo(cx,cy,px,py);
			target.lineTo(x,y+cornerRadius);
			angle += theta;
			cx = x+cornerRadius+(Math.cos(angle+(theta/2))*cornerRadius/Math.cos(theta/2));
			cy = y+cornerRadius+(Math.sin(angle+(theta/2))*cornerRadius/Math.cos(theta/2));
			px = x+cornerRadius+(Math.cos(angle+theta)*cornerRadius);
			py = y+cornerRadius+(Math.sin(angle+theta)*cornerRadius);
			target.curveTo(cx,cy,px,py);
			angle += theta;
			cx = x+cornerRadius+(Math.cos(angle+(theta/2))*cornerRadius/Math.cos(theta/2));
			cy = y+cornerRadius+(Math.sin(angle+(theta/2))*cornerRadius/Math.cos(theta/2));
			px = x+cornerRadius+(Math.cos(angle+theta)*cornerRadius);
			py = y+cornerRadius+(Math.sin(angle+theta)*cornerRadius);
			target.curveTo(cx,cy,px,py);
		} else {
			target.moveTo(x,y);
			target.lineTo(x+width,y);
			target.lineTo(x+width,y+height);
			target.lineTo(x,y+height);
			target.lineTo(x,y);
		}
	}
}